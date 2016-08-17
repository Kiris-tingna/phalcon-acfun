<button id="chooseImage" class="btn btn-success">选择图片</button>

<style>
    .pa-small-li {
        float: left;
        width: 100px;
        height: 100px;
        margin-right: 10px;
        padding: 5px;
        overflow: hidden;
        border: 1px solid transparent;
        background-color: #fff;
    }
    .pa-small-li:hover {
        cursor: pointer;
        border: 1px solid #2D93CA;
    }
    .pa-small-li.active{
        border: 1px solid #2D93CA;
    }
    .pa-small-img {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    .pa-small-img img {
        max-width: 100%;
    }
    .pa-pic-input {
        width: 40%;
        float:left;
    }
</style>
<div id="ImgModel" class="modal hide fade">
    <div class="modal-header">
        <h3>请选择图片</h3><a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
    </div>
    <div class="modal-body">
        <div class="album cl"></div>
    </div>
    <div class="modal-footer">
        <button class="Js-confirm btn btn-primary">确定</button> <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    </div>
</div>
