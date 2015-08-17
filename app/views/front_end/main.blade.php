@extends('front_end/home')
@section('content')
<!--<div class="row-fluid sortable">-->
<div class="box span6 offset3">
    <div class="box-header">
        <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Welcome to Address Book</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SI no</th>
                    <th>Department</th>
                    <th>Number of Status</th>
                                                              
                </tr>
            </thead>   
            <tbody>
                <?php $serial_no = 1; ?>
                @foreach ($companies as $company)
                
                <tr>
                    <td>{{ $serial_no++ }}</td>
                    <td class="center">{{ $company->company_type }}</td>
                    <td class="center">9</td>
                                                        
                </tr>     
                @endforeach
            </tbody>
        </table>  
        <div class="pagination pagination-centered">
            <ul>
                <li><a href="#">Prev</a></li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>     
    </div>
</div>
<!--</div>-->
@stop
