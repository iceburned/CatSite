
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Member Login">
    <meta name="description" content="">
    <title>Create post</title>
    <link rel="stylesheet" href="{% static '/forum/css/nicepage.css' %}" media="screen">
    <link rel="stylesheet" href="{% static '/forum/css/Create-post.css' %}" media="screen">
    <script class="u-script" type="text/javascript" src="{% static 'forum/js/jquery.js' %}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{% static 'forum/js/nicepage.js' %}" defer=""></script>
    <meta name="generator" content="#">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Create post">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>
<body class="u-body u-xl-mode" data-lang="en">
<section class="u-clearfix u-section-3" id="carousel_03c7">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Create Topic</h1>
        <div class="u-border-3 u-border-palette-5-light-1 u-line u-line-horizontal u-line-1"></div>
        <h4 class="u-text u-text-default u-text-2"><span class="u-text-custom-color-3"></span>
        </h4>
        <div class="u-form u-form-1">
            <form method="post">
{{--                {{ form.as_p }}--}}

                {% csrf_token %}

                <button type="submit"
                        class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">
                    Create
                </button>
                <a href="{% url 'category' %}"
                   class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">Cancel</a>
            </form>
        </div>
    </div>
</section>

{% endblock %}
