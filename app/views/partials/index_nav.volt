{# nav #}
<div class="z-header">
    <div class="z-banner">
        <div class="z-background" style="background-image: url({{ banner }})"></div>
        <div class="z-mask"></div>
    </div>
    <div class="z-nav">
        <div class="container z-container">
            <ul class="z-menu clearfix">
                {% for nav in navs %}
                    <li class="z-item">{{ nav }}</li>
                {% endfor %}
            </ul>
        </div>
    </div>
</div>
<div class="z-img" style="background-image: url({{ banner }})"></div>