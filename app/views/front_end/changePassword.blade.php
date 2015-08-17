@extends('front_end/home')

@section('content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Change Password <small class="text-success">{{ Session::get('success') }}</small></h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            
            {{ Form::open(array('url' => 'passwordSubmit', 'methrod' => 'post', 'class' => 'form-horizontal'))}}
                <fieldset>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">User Id </label>
                        <div class="controls">
                            <!--<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>-->
                            {{ Form::email('email', Auth::user()->email,array('placeholder' => 'type username', 'class' => 'input-large span10', 'id' => 'username' )) }}
                            <p class="text-error help-block" style="color: #ff9999">{{ Session::get('massage') }}</p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Current Password </label>
                        <div class="controls">
                            <!--<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>-->
                            {{ Form::password('old_password', array('placeholder' => 'Old password', 'class' => 'span6 typeahead', 'id' => 'typeahead' )) }}
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">New Password </label>
                        <div class="controls">
                            <!--<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>-->
                            {{ Form::password('new_password', array('placeholder' => 'New password', 'class' => 'span6 typeahead', 'id' => 'typeahead' )) }}
                            <p class="help-block" style="color: #ff9999">{{ Session::get('password') }}</p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Confirm Password </label>
                        <div class="controls">
                            <!--<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>-->
                            {{ Form::password('confirm_password', array('placeholder' => 'Confirm password', 'class' => 'span6 typeahead', 'id' => 'typeahead' )) }}
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            {{ Form::close() }} 

        </div>
    </div><!--/span-->

</div><!--/row-->
@stop
