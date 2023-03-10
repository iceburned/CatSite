<!DOCTYPE html>
@extends('base')
{{--<!DOCTYPE html>--}}
{{--{% extends 'base.html' %}--}}
{{--{% load static %}--}}
{{--{% block nav %}--}}
@section('nav')

<section class="u-clearfix u-section-1" id="sec-c893">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"></div>
    <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
            </div>
        </div>
    </div>
</section>

<section class="u-align-center u-clearfix u-section-2" id="sec-c4bb">

    <div class="u-clearfix u-sheet u-sheet-1">
        <form method="post">
            <h1>Topics</h1>
            {% if user.is_superuser or user.is_staff %}
            <a href="{% url 'subcategory_create'  pk=subcategory_pk %}"
               class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-dark-1 u-radius-6 u-btn-1">Create
                Topic</a>
            {% endif %}
            {% csrf_token %}

            <div class="u-expanded-width u-table u-table-responsive u-table-1">
                <table class="u-table-entity u-table-entity-1">
                    <colgroup>
                        <col width="40%">
                        <col width="12.6%">
                        <col width="10.4%">
                        <col width="40%">
                        <col width="20%">
                    </colgroup>
                    <thead class="u-custom-font u-font-lobster u-palette-1-light-1 u-table-header u-table-header-1">
                    <tr style="height: 45px;">
                        <th class="u-table-cell u-table-cell-2">Title</th>
                        <th class="u-table-cell u-table-cell-3">Created</th>
                        <th class="u-table-cell u-table-cell-4">Count topics</th>
                        <th class="u-table-cell u-table-cell-5">Last topic</th>
                        <th class="u-table-cell u-table-cell-5">Edit</th>
                    </tr>
                    </thead>
                    <tbody class="u-custom-font u-table-alt-palette-1-light-3 u-table-body u-text-font">
                    {% for sub in object_list %}
                    @foreach($topics as $topic)
                        <tr style="height: 118px;">
                            <td class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-table-cell u-table-cell-7">
                                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-5-dark-1 u-btn-2"
                                   href="{% url 'topics' pk=subcategory_pk ek=sub.pk %}">{{ $topic->title }} </a>
                            </td>
                            <td class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-table-cell u-table-cell-8">{{ $topic->updated_at }} </td>
    {{--                        <td class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-table-cell u-table-cell-9">{{ sub.count_topics }} </td>--}}
    {{--                        <td class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-table-cell u-table-cell-10">{{ sub.last_topic }}</td>--}}
                            {% if user.is_superuser or user.is_staff %}
                            <td class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-table-cell u-table-cell-10">
                                <a class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-dark-1 u-palette-1-light-1 u-radius-10 u-btn-3"
                                   href="{% url 'subcategory_edit' pk=subcategory_pk ek=sub.pk %}">Edit</a>
                                <a class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-dark-1 u-palette-1-light-1 u-radius-10 u-btn-3"
                                   href="{% url 'subcategory_delete' pk=subcategory_pk ek=sub.pk %}">Delete</a>
                            </td>
                            {% endif %}

                        </tr>
                    @endforeach
{{--                    {% endfor %}--}}
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
