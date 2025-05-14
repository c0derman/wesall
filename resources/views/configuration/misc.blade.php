<!-- Page Heading -->
@php
$availableHomePages = [
    'outer-home' => __tr('Home Page 1'),
    'outer-home-2' => __tr('Home Page 2'),
];
@endphp
<!-- Page Heading -->
<h3><?= __tr('Misc Settings') ?></h3>
<!-- Page Heading -->
<hr>
<!--  home page Setting Form -->
<fieldset class="lw-fieldset" x-data="{panelOpened:false}" x-cloak>
    <legend class="lw-fieldset-legend" @click="panelOpened = !panelOpened">{{ __tr('Home Page Settings') }} <small class="text-muted">{{  __tr('Click to expand/collapse') }}</small></legend>
    <form x-show="panelOpened" class="lw-ajax-form lw-form" method="post" action="<?= route('manage.configuration.write', ['pageType' => request()->pageType]) ?>">
         <!-- Select home page  -->
         <div class="form-group">
            <!--  home page -->
            <div class="col-md-4 mb-3 mb-sm-0">
                <label for="lwSelectHomePage"><?= __tr('Select home page') ?></label>
                <select id="lwSelectHomePage" class="form-control" placeholder="{{ __tr('Select home page') }}" name="current_home_page_view" required>
                    @foreach ($availableHomePages as $availableHomePageKey => $availableHomePage)
                        <option value="{{ $availableHomePageKey }}" 
                            @if($availableHomePageKey == getStoreSettings('current_home_page_view')) selected @endif>
                            {{ $availableHomePage }}
                        </option>
                    @endforeach
                </select>
            </div>
            <!-- /  home page -->
        </div>
      
     <!-- /Select home page  -->
    <h3 class="my-5 col-md-4 text-center text-muted">{{  __tr('------- OR -------') }}</h3>
    <div class="mb-3 mb-sm-0 col-md-4">
        <label id="lwOtherHomePage">{{  __tr('External Home page') }} </label>
        <div class="form-group">
            <label id="lwOtherHomePageUrl">{{  __tr('Set home page url if you want to use other home page than default') }} </label>
            <input type="url" class="form-control" id="lwOtherHomePageUrl" name="other_home_page_url" value="<?= $configurationData['other_home_page_url'] ?>">
        </div>
    </div>
    <hr>
    <div class="form-group col" name="footer_code">
        <button type="submit" class="btn btn-primary btn-user lw-btn-block-mobile">{{ __tr('Update') }}</button>
    </div>
</form>
</fieldset>
@lwPush('appScripts')

@lwPushEnd