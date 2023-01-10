<!DOCTYPE html>
@extends('base')
{{--<!DOCTYPE html>--}}
{{--{% extends 'base.html' %}--}}
{{--{% load static %}--}}
{{--{% block nav %}--}}
@section('nav')

<section
    class="u-align-center u-clearfix u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-white u-section-4"
    id="carousel_3c1a">
    <p>This is site for cat lovers. Here can find information what your cat loves or does not. Also can share
        thoughts with other people to discuss for any topic. Please be respectful!</p>
    <h1>Enjoy your stay!</h1>
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-palette-3-light-3 u-radius-10 u-form-1">
            <div class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form"
                 style="padding: 30px;">
                <h4 class="u-align-center u-form-group u-form-text u-text u-text-1"> Ask Administrator! </h4>

                <form method="post">
{{--                    {{ form.as_p }}--}}
{{--                    {% csrf_token %}--}}
                    <div>
                        <button type="submit">Send</button>
                    </div>
                </form>

            </div>
        </div>
        {#        <img class="u-image u-image-contain u-image-round u-radius-10 u-image-1" alt="" data-image-width="652" data-image-height="977" src="images/2f6e485c2571109ff872370245a252e6.jpg">#}
        <img class="u-image u-image-contain u-image-round u-radius-10 u-image-1" alt="" data-image-width="652"
             data-image-height="977" src="{% static '/forum/images/2f6e485c2571109ff872370245a252e6.jpg' %}">
        <div class="u-social-icons u-spacing-10 u-social-icons-1">

        </div>
    </div>
</section>
@endsection
{{--{% endblock %}--}}
