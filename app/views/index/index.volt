{# ppt block #}
<h1></h1>
<div class="row" style="height: 310px; overflow: hidden">
    <div class="col-md-8">
        <div class="pa-ppt">
            <ul>
                {% for image in bannerImages %}
                    <li><img class="pa-ppt-item" src="{{ static_url(image.url) }}" alt="{{ image.description }}"></li>
                {% endfor %}
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        {% for side in  sideImages%}
            <li class="pa-index-col col-md-6">
                <a href="{{ url('index/v/') }}" class="pa-img-warpper">
                    {{ image(side.url, "alt": side.description, "class": "pa-index-item") }}
                </a>
                <p class="pa-tit-desc">{{ side.name }}</p>
                <p class="pa-sub-desc">{{ side.description }}</p>
            </li>
        {% endfor %}
    </div>
</div>


{# each block #}
{% for collection in collections %}
    <h1>{{ collection['area'].name }}</h1>

    <div class="row">
        <div class="col-md-9">
        {# each item #}
        {% for content in collection['content'] %}
            <li class="pa-index-col col-md-3">
                <a href="{{ url('index/v/') }}{{ content.id }}" class="pa-img-large-warpper">
                    {{ image(content.url, "alt": content.name, "class": "pa-index-item") }}
                </a>
                <p>{{ content.name }}<p>
                <p class="pa-sub-desc">{{ content.description }}<p>
            </li>
        {% endfor %}
        </div>
    </div>
{% endfor %}

<!-- footer -->
{{ link_to("index/map","网站地图") }}