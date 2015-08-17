@section('content')
<div class="box-content">
    <form class="form-horizontal">
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="typeahead">Auto complete </label>
                <div class="controls">
                    <input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                    <p class="help-block">Start typing to activate auto complete!</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="date01">Date input</label>
                <div class="controls">
                    <input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="fileInput">File input</label>
                <div class="controls">
                    <input class="input-file uniform_on" id="fileInput" type="file">
                </div>
            </div>          
            <div class="control-group hidden-phone">
                <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
                <div class="controls">
                    <textarea class="cleditor" id="textarea2" rows="3"></textarea>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>   

</div>
@stop