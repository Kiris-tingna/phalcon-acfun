<h1>新增类别节点</h1>

{{ form("admin/menu", "method": "post") }}
<div class="row cl">
    <label class="form-label col-xs-2 col-md-1" for="mid">
        <span class="label label-success">所在节点</span>
    </label>
    <div class="formControls col-xs-3 col-md-4">
        {{ text_field("mid","class":"input-text") }}
    </div>
    <label class="form-label col-xs-2 col-md-1" for="menu">
        <span class="label label-success">节点名称</span>
    </label>
    <div class="formControls col-xs-3 col-md-4">
        {{ text_field("menu","class":"input-text") }}
    </div>
</div>
{{ submit_button("新增", "class":"btn btn-primary-outline radius") }}
{{ endForm() }}
