$(document).ready(function(){
  $(".add_question").click(function(){
    var count = $(".question_div").length;
    var ans_count = $(".answer_div").length;
    var data=`
    <div class="bg-white rounded border mb-3 question_div" style="overflow: hidden;" id="question_div_`+count+`">                    
      <div class="row align-items-center py-3 px-lg-0 px-3" style="background: #eceef1;">
          <div class="col-lg-1 col-2">
              <div class="text-lg-center text-left">
                  <span><i class="far fa-bars text-secondary"></i></span>
              </div>
          </div>
          <div class="col-lg-7 pl-0 col-10">                                  
              <div class="mb-lg-0 mb-2 w-50 bg-white w-100 px-2 py-1 rounded bd-bt">
                  <input type="text" name="question_`+count+`" class="border-0 outline-0 form-control" placeholder="How it work?" id="question_`+count+`">
              </div>
          </div>
          <div class="col-lg-2 col-6">
              <form>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="mandatory_`+count+`" id="mandatory_`+count+`">
                      <label class="form-check-label" for="mandatory_`+count+`">Mandatory</label>
                  </div>
              </form>
          </div>
          <div class="col-lg-2 col-6">
              <div class="text-lg-left text-right">
                  <i class="fas fa-copy text-secondary bg-white border p-2 rounded"></i>
                  <i class="far fa-trash-alt text-secondary bg-white border p-2 rounded delete" data-id="`+count+`"></i>
              </div>
          </div>
      </div>
      <div class="replies_`+count+`">
      </div>
      <div class="row px-3 py-2">
          <button type="button" class="btn btn-white border ml-5 add_reply" data-id="`+count+`"><i class="fal fa-plus mr-3"></i>Add Reply</button>
      </div>
  </div>
    `;
    $(".appe").append(data);
  });

  $(document).on("click", ".add_reply", function () {
    var id = $(this).data('id');
    console.log(id);
    var ans_count = $(".answer_div_"+id).length;
    var html = `<div class="row align-items-center px-3 py-2 answer_div_`+id+`">
          <div class="col-lg-1 col-2">
              <div class="text-lg-center text-left">
                  <span><i class="far fa-bars text-secondary"></i></span>
              </div>
          </div>
          <div class="mb-lg-0 mb-2 col-lg-7 col-10 pl-0">                                 
              <div class="w-50 bg-white w-100 px-2 py-1 rounded bd-bt">
                  <input type="text" name="answer_`+id+`_`+ans_count+`" class="border-0 outline-0 form-control" placeholder="Answer#`+ans_count+`" id="answer_`+id+`_`+ans_count+`">
              </div>
          </div>
          <div class="col-lg-2 col-6">
              <form>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="right_answer_`+id+`_`+ans_count+`">
                      <label class="form-check-label" for="">Right answer</label>
                  </div>
              </form>
          </div>
          <div class="col-lg-2 col-6">
              <div class="text-right">
                  <i class="far fa-trash-alt text-secondary bg-white border p-2 rounded"></i>
              </div>
          </div>
      </div>`;
    $(".replies_"+id).append(html);
  });
  // $(document).on('click', '.delete', function () {
  //   var id = $(this).data('id');
  //   $("#question_div_"+id).remove();
  // });
});
