{{--{% extends 'base.html' %}--}}
{{--{% load static %}--}}
{{--{% block nav %}--}}
    <!DOCTYPE html>
@extends('base')
{{--<!DOCTYPE html>--}}
{{--{% extends 'base.html' %}--}}
{{--{% load static %}--}}
{{--{% block nav %}--}}
@section('nav')

<section class="u-clearfix u-section-1" id="sec-c893">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="u-align-center u-clearfix u-section-2" id="sec-c4bb">

    <div class="u-clearfix u-sheet u-sheet-1">
        <form method="post">

            <h1>Posts</h1>

            <a href="{% url 'create_topic' pk=subcategory_pk ek=topics_ek %}"
               class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-dark-1 u-radius-6 u-btn-1">Create
                Post</a>

            {% csrf_token %}

            <div class="u-expanded-width u-table u-table-responsive u-table-1">
                <table class="u-table-entity u-table-entity-1">
                    <colgroup>

                        <col width="20%">
                        <col width="80.6%">
                        <col width="40%">
                    </colgroup>
                    <thead class="u-custom-font u-font-lobster u-palette-1-light-1 u-table-header u-table-header-1">
                    <tr style="height: 45px;">

                        <th class="u-table-cell u-table-cell-2">Creator</th>
                        <th class="u-table-cell u-table-cell-3">Content</th>
                        <th class="u-table-cell u-table-cell-5">Edit</th>
                    </tr>
                    </thead>
                    <tbody class="u-custom-font u-table-alt-palette-1-light-3 u-table-body u-text-font">
                    {% for topic in topics_context %}
                    <tr style="height: 118px;">
                        <td class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-table-cell u-table-cell-6">
{{--                            <img src="{{ topic.user.avatar_pic }}" width="160px" height="160px">--}}
{{--                            <h6>{{ topic.user }}</h6>--}}

                        </td>
{{--                        <td class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-table-cell u-table-cell-8">{{ topic.content }} </td>--}}

                        <td class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-table-cell u-table-cell-10">

                            {% if instance_user.is_superuser or instance_user.is_staff or topic.user == instance_user %}
                            <a class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-dark-1 u-palette-1-light-1 u-radius-10 u-btn-3"
                               href="{% url 'edit_topic' pk=subcategory_pk ek=topics_ek tk=topic.pk %}">EDIT</a>
                            <a class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-dark-1 u-palette-1-light-1 u-radius-10 u-btn-3"
                               href="{% url 'topic_delete' pk=subcategory_pk ek=topics_ek tk=topic.pk %}">DELETE</a>
                            {% endif %}
                        </td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </form>
    </div>

{{--    {% if page_obj.has_previous %}--}}
{{--    <a href="?page=1">first</a>--}}
{{--    <a href="?page={{ page_obj.previous_page_number }}">previous</a>--}}
{{--    {% endif %}--}}

{{--    Page {{ page_obj.number }} of {{ page_obj.paginator.num_pages }}.--}}

{{--    {% if page_obj.has_next %}--}}
{{--    <a href="?page={{ page_obj.next_page_number }}">next</a>--}}
{{--    <a href="?page={{ page_obj.paginator.num_pages }}">last</a>--}}
{{--    {% endif %}--}}

</section>
@endsection

{{--{% endblock %}--}}
