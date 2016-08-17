<div class="col-md-1">
    <label class="label label-default"> 主要栏目 </label>
</div>
<div class="col-md-10">
    {% for cate in cates %}
        <p>
            {% for subcate in cate %}
                {% if loop.first %}
                    {{ link_to("#", subcate.name, "class":"btn btn-primary") }}
                {% else %}
                    {{ link_to("#", subcate.name, "class":"btn btn-default") }}
                {% endif %}
            {% endfor %}
        </p>
    {% endfor %}
</div>
<hr>