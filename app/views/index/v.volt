<h3>name: {{ collect.name }}</h3>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <img class="img-thumbnail" src="{{ picture.origin_url }}" alt="{{ collect.name }}">
    </div>
    <div class="col-md-8 col-sm-8">
        <p><span>别名</span>{{ collect.description }}</p>
        <p><span>简介</span>{{ collect.content }}</p>
    </div>
</div>
<span>created_at: {{ collect.created_at }}</span>
<span>published_at: {{ collect.published_at }}</span>

<div class="row">
{% for ani in animates %}
    <div class="col-md-2 col-sm-2">
        <div class="thumbnail">
            <img class="img-rounded" src="{{ ani.url }}" alt="{{ ani.name }}">
            <p>id: {{ ani.id }}</p>
            <p>{{ ani.name }}</p>
            <p>{{ ani.description }}</p>
            <p>{{ ani.content }}</p>
            <p>published_at: {{ ani.published_at }}</p>
        </div>
    </div>
{% endfor %}
</div>