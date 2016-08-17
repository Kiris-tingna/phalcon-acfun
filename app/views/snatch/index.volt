<p>优酷批量抓取方式</p>
{{ form("snatch/youku", "method": "post") }}
<div class="row cl">
    <label class="form-label col-xs-2 col-md-1" for="cate">
        <span class="label label-success">所在节点</span>
    </label>
    <div class="formControls col-xs-3 col-md-4">
        {{ partial('partials/cate', ["name":'cate']) }}
    </div>

    <label class="form-label col-xs-2 col-md-1" for="url">
        <span class="label label-success">优酷地址</span>
    </label>
    <div class="formControls col-xs-3 col-md-4">
        {{ text_field("url","class":"input-text") }}
    </div>
    {{ submit_button("抓取", "class":"btn btn-primary-outline radius") }}
</div>
{{ endForm() }}



{# partial('partials/picture') #}
{# des #}