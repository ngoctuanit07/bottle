<a href="#" class="btn-trigger-show-seo-detail">{{ trans('packages/seo-helper::seo-helper.edit_seo_meta') }}</a>
<div class="seo-preview">
    <p class="default-seo-description @if (!empty($object)) hidden @endif">{{ trans('packages/seo-helper::seo-helper.default_description') }}</p>
    <div class="existed-seo-meta @if (empty($object)) hidden @endif">
        <span class="page-title-seo">
             {{ $meta['seo_title'] ?? (!empty($object) ? $object->name ?? $object->title : null) }}
        </span>

        <div class="page-url-seo ws-nm">
            <p>-</p>
        </div>

        <div class="page-description-seo ws-nm">
            {{ strip_tags($meta['seo_description'] ?? (!empty($object) ? $object->description : (!empty($object) && $object->content ? Str::limit($object->content, 250) : old('seo_meta.seo_description')))) }}
        </div>
        <div class="page-keyword-seo ws-nm">
            {{ strip_tags($meta['seo_keywords'] ?? (!empty($object) ? $object->keyword : (!empty($object) && $object->content ? Str::limit($object->content, 250) : old('seo_meta.seo_keywords')))) }}
        </div>
    </div>
</div>


<div class="seo-edit-section hidden">
    <hr>
    <div class="form-group">
        <label for="seo_title" class="control-label">{{ trans('packages/seo-helper::seo-helper.seo_title') }}</label>
        {!! Form::text('seo_meta[seo_title]', $meta['seo_title'] ?? old('seo_meta.seo_title'), ['class' => 'form-control', 'id' => 'seo_title', 'placeholder' => trans('packages/seo-helper::seo-helper.seo_title'), 'data-counter' => 120]) !!}
    </div>
    <div class="form-group">
        <label for="seo_description" class="control-label">{{ trans('packages/seo-helper::seo-helper.seo_description') }}</label>
        {!! Form::textarea('seo_meta[seo_description]', strip_tags($meta['seo_description']) ?? old('seo_meta.seo_description'), ['class' => 'form-control', 'rows' => 3, 'id' => 'seo_description', 'placeholder' => trans('packages/seo-helper::seo-helper.seo_description'), 'data-counter' => 155]) !!}
    </div>
    <div class="form-group">
        <label for="seo_keywords" class="control-label">{{ trans('packages/seo-helper::seo-helper.seo_keywords') }}</label>
        {!! Form::textarea('seo_meta[seo_keywords]', strip_tags($meta['seo_keywords']) ?? old('seo_meta.seo_keywords'), ['class' => 'form-control', 'rows' => 3, 'id' => 'seo_keywords', 'placeholder' => trans('packages/seo-helper::seo-helper.seo_keywords'), 'data-counter' => 155]) !!}
    </div>
</div>