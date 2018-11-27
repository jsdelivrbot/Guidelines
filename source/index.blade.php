@extends('_layouts.master', ['py' => 'py-0'])

@section('body')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Nuclear Campaign - Guidelines</h1>
            <p class="lead mb-0">This site contains a set of guidelines we use to bring our projects to a good end. We decided to document our workflow because consistency is one of the most valuable traits of maintainable software.</p>
        </div>
    </div>

    <div class="container py-3">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        Workflow guidelines
                    </div>
                    <div class="card-body shadow-sm">
                        <i class="fas fa-wrench fa-2x fa-pull-left fa-border"></i>

                        <p class="card-text">If your need guidelines while deploying your project or settings up a new project.
                            You can use this set of guidelines through the procedures. To help u with a good setup or deployment.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        Coding guidelines
                    </div>
                    <div class="card-body">
                        <i class="fas fa-laptop-code fa-2x fa-pull-left fa-border"></i>

                        <p class="card-text">
                            If you need for the coding on your application or writing maintainable code in your project.
                            You can use this set of guidelines trough your project. To help you in the development process.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
