<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Single Page Forum</title>
</head>
<body>

    <div id="app">
        <v-app>
            <app-home>

            </app-home>
            {{--<template>

                
                <v-toolbar>
                    <v-toolbar-side-icon></v-toolbar-side-icon>
                    <v-toolbar-title>Title</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-toolbar-items class="hidden-sm-and-down">
                        <v-btn flat>Link One</v-btn>
                        <v-btn flat>Link Two</v-btn>
                        <v-btn flat>Link Three</v-btn>
                    </v-toolbar-items>
                </v-toolbar>
            </template>--}}
        </v-app>
    </div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
{{--
<script>
    import VApp from "vuetify/src/components/VApp/VApp";
    export default {
        components: {VApp}
    }
</script>--}}
