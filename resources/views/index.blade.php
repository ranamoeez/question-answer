<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COURSE</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container bg-light py-3">
        <form method="POST" action="{{url('/save')}}" enctype="multipart/form-data" role="form">
            @csrf
            <div class="row mb-5">
                <div class="col-md-6">
                    <div>
                        <p><i class="fas fa-arrow-left mr-3"></i><span class="first-p">create new quiz</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-right">
                        <button type="button" class="btn btn-white border">Save as draft</button>
                        <button class="btn btn-purp text-white">Create and Publish</button>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4">
                    <div>
                        <p class="fw-5">Details</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="bg-white p-3 rounded">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4">
                    <div>
                        <p class="fw-5 mb-0">Questions</p>
                        <small>Learn more about the <u class="bg-purp">quiz</u></small>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="text-right mb-3">
                        <button type="button" class="btn btn-white border add_question"><i class="fal fa-plus mr-3"></i>Add Question</button>
                    </div>
                    <div class="appe">
                        <div class="bg-white rounded border mb-3 question_div" style="overflow: hidden;" id="question_div_0">                    
                            <div class="row align-items-center py-3 px-lg-0 px-3" style="background: #eceef1;">
                                <div class="col-lg-1 col-2">
                                    <div class="text-lg-center text-left">
                                        <span><i class="far fa-bars text-secondary"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-7 pl-0 col-10">                                  
                                    <div class="mb-lg-0 mb-2 w-50 bg-white w-100 px-2 py-1 rounded bd-bt">
                                        <input type="text" name="question_0" class="border-0 outline-0 form-control" placeholder="How it work?" id="question_0">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <form>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="mandatory_0" id="mandatory_0">
                                            <label class="form-check-label" for="mandatory_0">Mandatory</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <div class="text-lg-left text-right">
                                        <i class="fas fa-copy text-secondary bg-white border p-2 rounded" data-id="0"></i>
                                        <i class="far fa-trash-alt text-secondary bg-white border p-2 rounded delete" data-id="0"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="replies_0">
                            </div>

                            <div class="row px-3 py-2">
                                <button type="button" class="btn btn-white border ml-5 add_reply" data-id="0"><i class="fal fa-plus mr-3"></i>Add Reply</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mb-3">
                        <button type="button" class="btn btn-white border add_question"><i class="fal fa-plus mr-3"></i>Add Question</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>