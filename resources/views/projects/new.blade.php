@extends('layouts.app')

@section('content')


    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">{{ __('Projects')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">New</li>
        </ol>
    </nav>


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">New Project</h6>
                    <form action="{{ route('projects.save')}}" method="POST" id="projects.new">
                        @csrf
                        <div class="form-group">
                            <label for="project_name">{{ __('Project name')}}</label>
                            <input type="text" name="project_name" id="project_name" class="form-control" autocomplete="off" placeholder="Project name.." required>
                        </div>
                        <div class="form-group">
                            <label for="project_url">{{ __('Project URL')}}</label>
                            <input type="url" name="project_url" id="project_url" class="form-control" autocomplete="off" placeholder="Project URL" required>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="project_language">{{ __('Language')}}</label>
                                <input type="text" name="project_language" id="project_language" class="form-control" autocomplete="off" placeholder="Project language.." required>
                            </div>
                            <div class="form-group col-6">
                                <label for="project_location">{{ __('Location')}}</label>
                                <input type="text" name="project_location" id="project_location" class="form-control" autocomplete="off" placeholder="Project location.." required>
                            </div>
                        </div>
                           
                            <div class="form-group">
                            <label for="project_description">{{ __('Description')}}</label>
                                <textarea name="project_description" id="project_description" cols="30" rows="10" class="form-control col-12"></textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="save_project" id="save_project" class="btn btn-block btn-sm btn-primary">
                            </div>
                    </form>
                    <script>
                        $("#projects.new").validate();
                        </script>
                </div>
            </div>
        </div>
    </div>


@endsection
