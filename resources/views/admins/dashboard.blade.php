<!DOCTYPE html>
<html lang="en">

<head>
    @include('admins.sections.meta')
    <title>
        {{ $title }}
    </title>

    @include('admins.sections.links')
    @include('sections.styles')
    <link rel="stylesheet" href="{{ asset('css/admin.style.v1.css') }}">

</head>

<body class="striped-bg">
    <div class="wrapper brutal-navigator-container d-flex flex-row justify-content-center align-items-center">
        <ul class="brutal-navigator bg-brutal-yellow">
            <li><button type="button" class="btn"><i class="bi bi-person-walking" style="font-size: 24px;"></i></button></li>
            <li><button type="button" class="btn"><i class="bi bi-graph-up" style="font-size: 24px;"></i></button></li>
            <li><button type="button" class="btn"><i class="bi bi-gear-fill" style="font-size: 24px;"></i></button></li>
            <li><button type="button" class="btn"><i class="bi bi-box-arrow-right" style="font-size: 24px;"></i></button></li>
        </ul>
        <div class="brutal-navigator-body bg-brutal-white" style="position: relative;">
            <div class="row mt-4">
                <div class="col-sm-12">
                    <div class="brutal-card-input" style="width: 99%;">
                        <label for="attendee_name" class="form-label">Attendee's Name</label>
                        <input id="attendee_name" type="text" class="brutal-form-input"/>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-8">
                    <div class="brutal-card-input mt-2">
                        <label for="attendee_name" class="form-label">Attendee's IAGD (#)</label>
                        <input id="attendee_name" type="text" class="brutal-form-input" value="IAGD-"/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="availment-days-btn btn brutal-btn bg-brutal-yellow" data-date="2024-06-28" data-active="false" style="margin-top: 8px; margin-left: -8px; width: 100%; height: 128px; font-size: 24px;"><i class="availment-days-icon bi bi-square" style="vertical-align: 0;"></i> <span class="availment-days-text">Walk In</span></button>
                </div>
            </div>
            <div class="row" style="position: absolute; bottom: 5px; width: 100%;">
                <div class="col-sm-12">
                    <button type="button" class="attendee-save-btn brutal-btn bg-brutal-green" style="font-size: 24px; height: 60px; width: 100%; margin: 0 auto;"><i class="bi bi-check2-circle" style="vertical-align: 0;"></i> Punch In</button>    
                </div>
            </div>
        </div>
    </div>
    <div class="l-footer">

    </div>
    @include('jsVars')
    @include('admins.sections.scripts')
    <script src="{{ asset('js/admin.dashboard.js') }}"></script>
</body>

</html>
