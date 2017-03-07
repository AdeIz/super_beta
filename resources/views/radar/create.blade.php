@extends('adminlte::layouts.app')


@section('css-content')
    <link href="{{asset('plugins/colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/backend.css')}}" rel="stylesheet" type="text/css" />    
@endsection

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-push-2">
               <div class="box box-danger center-form" id="form">
                  <div class="box-header">
                        <div class="pull-right box-tools">
                            <button class="btn btn-danger btn-sm refresh-btn" data-toggle="tooltip" title="" data-original-title="Reload" 
                                onclick="form_ui.reset();">
                                <i class="fa fa-refresh"></i>
                            </button>
                            <button class="btn btn-danger btn-sm" data-widget="collapse" data-toggle="tooltip" title="" 
                                data-original-title="Collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                     <i class="glyphicon glyphicon-edit"></i>
                     <h3 class="box-title"> &nbsp; News create form</h3>
                  </div>
                  <div class="box-body" style="display: block;">
                     <div class="row">
                        <form role="form" action="{{ route('news-store') }}" enctype="multipart/form-data" method="POST">
                          {{csrf_field()}}
                          <div class="box-body">
                            <div class="form-group">
                               <label for="f0">Parent Category Radar</label>
                               {!! Form::select(null, $categories, null, ['placeholder'=>'choose here', 'id'=>'parentCategoryradar', 'class'=>'form-control']); !!}
                            </div>
                            <div class="form-group">
                               <label for="f0">Child Category</label>
                               <select id="childCategory" name="category_id" class="form-control">
                                  <option disabled="disabled" value="0" selected="true">Choose Here</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="f0">Picture 1</label>
                                <input type="file" id="file" class="form-control" value="" name="img1" placeholder="News picture" 
                                    accept=".jpg, .jpeg, .png" required>
                                <input type="text" class="form-control" value="" name="img_caption1" placeholder="Caption" 
                                    maxlength="255" size="255" required>
                            </div>

                            <div class="form-group">
                                <label for="f0">Picture 2</label>
                                <input type="file" id="file" class="form-control" value="" name="img2" placeholder="News picture" 
                                    accept=".jpg, .jpeg, .png">
                                <input type="text" class="form-control" value="" name="img_caption2" placeholder="Caption" 
                                    maxlength="255" size="255">
                            </div>
                            <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
                            <script type="text/javascript">
                                tinymce.init({
                                    relative_urls : false,
                                    remove_script_host : false,
                                    convert_urls : true,
                                    selector: "textarea.postbody",
                                    height: "280",
                                    image_caption: true,
                                    automatic_uploads: true,
                                    schema: "html5",
                                    extended_valid_elements:"script[charset|async|defer|language|src|type]",
                                    plugins: ["textcolor advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
                                    toolbar: "insertfile undo redo | styleselect | forecolor backcolor bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link ",
                                });
                            </script>

                            <div class="form-group">
                              <textarea name='body' class="form-control postbody">{{ old('body') }}</textarea>
                            </div>
                            <div class="form-group">
                               <center>
                                  <h3>::News additional module::</h3>
                               </center>
                            </div>
                            <div id="module">
                              <div class="form-group">
                                <label for="f0">Connected news</label><input type="search" id="suggestion_value_0" value="" class="form-control" name="nws_additional_content[0]" placeholder="Connected news" onkeyup="doSuggestion('0');" onfocus="doSuggestion_focus('0');" onblur="doSuggestion_blur('0');"><input type="hidden" id="suggestion_value_id_0" value="" name="nws_content[0]"><input type="hidden" value="0" name="type[0]">
                                <div class="suggestion_box">
                                   <ul id="suggestion_0" data-elementarray="0" class="suggestion_inner" style="display: none;">
                                      <li>Please type your keyword</li>
                                   </ul>
                                </div>
                              </div>
                              <div class="form-group"><label for="f0">Picture</label><input type="file" id="file" class="form-control" accept=".jpg, .jpeg, .png" value="" name="nws_content[1]" placeholder="Picture"><input type="hidden" value="1" name="type[1]"><input type="text" class="form-control" value="" name="nws_additional_content[1]" placeholder="Caption" maxlength="255" size="255"></div>
                              <div class="form-group">
                                <label for="f0">News story</label><input type="search" id="suggestion_value_2" value="" class="form-control" name="nws_additional_content[2]" placeholder="News story" onkeyup="doSuggestion('2');" onfocus="doSuggestion_focus('2');" onblur="doSuggestion_blur('2');"><input type="hidden" id="suggestion_value_id_2" value="" name="nws_content[2]"><input type="hidden" value="3" name="type[2]">
                                <div class="suggestion_box">
                                   <ul id="suggestion_2" data-elementarray="2" class="suggestion_inner" style="display: none;">
                                      <li>Please type your keyword</li>
                                   </ul>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="f0">News story</label><input type="search" id="suggestion_value_3" value="" class="form-control" name="nws_additional_content[3]" placeholder="News story" onkeyup="doSuggestion('3');" onfocus="doSuggestion_focus('3');" onblur="doSuggestion_blur('3');"><input type="hidden" id="suggestion_value_id_3" value="" name="nws_content[3]"><input type="hidden" value="3" name="type[3]">
                                <div class="suggestion_box">
                                   <ul id="suggestion_3" data-elementarray="3" class="suggestion_inner" style="display: none;">
                                      <li>Please type your keyword</li>
                                   </ul>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="f0">News story</label><input type="search" id="suggestion_value_4" value="" class="form-control" name="nws_additional_content[4]" placeholder="News story" onkeyup="doSuggestion('4');" onfocus="doSuggestion_focus('4');" onblur="doSuggestion_blur('4');"><input type="hidden" id="suggestion_value_id_4" value="" name="nws_content[4]"><input type="hidden" value="3" name="type[4]">
                                <div class="suggestion_box">
                                   <ul id="suggestion_4" data-elementarray="4" class="suggestion_inner" style="display: none;">
                                      <li>Please type your keyword</li>
                                   </ul>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="f0">Tag(s)</label><input type="text" name="news_tag" id="suggestion_value" placeholder="Tag1,Tag2,Tag3" onkeyup="getSuggestion();" onfocus="suggestion.style.display='block';clearTimeout(blurset);" onblur="blurset = setTimeout(function(){suggestion.style.display='none';},200);" class="form-control" value="">
                              <div class="suggestion_box">
                                <ul id="suggestion" style="display: none;">
                                   <li>Please type your tag</li>
                                </ul>
                              </div>
                            </div>
                            <div class="form-group"><label for="is_editorpick"><input id="is_editorpick" type="checkbox" name="is_editorpick" value="1"> Set as editors pick</label></div>
                          </div>
                          <input type="hidden" id="draft_set" name="is_draft" value="0">
                          <center>
                            <input type="submit" id="buttonSubmit" class="btn btn-primary" value="Publish"/>
                            &nbsp;
                            <input type="submit" id="buttonSubmit" class="btn btn-primary" value="Save as draft"/>
                          </center>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
@endsection



@push('script-content')
    <script>
      $("#parentCategory").change(function(){
        
        var url = "{{ route('category-child-get', 'xxx') }}";
        var selectedId = $(this).find(":selected").val();
        var selectedText = $(this).find(":selected").text();
        url = url.replace("xxx", selectedId);

        $.get(url, function( data ) {

          $('#childCategory').empty();
          // append data to childCategory
          $.each(data, function (i, item) {
            $('#childCategory').append($('<option>', { 
                value: i,
                text : item 
            }));
          });
        }).fail(function() {
            $('#childCategory').html($('<option>', { 
                value: selectedId,
                text : selectedText 
            }));
        });
      })
    </script>
@endpush