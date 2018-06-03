function subForm(form, link) {
    var data = $(form).serialize();
    var url = link; // the script where you handle the form input.
    console.log(data);
    $.post(url,data,
      function(resp){
        console.log(resp);
        if (resp.status) {
            window.location = resp.url;
        }else{
            console.log('Couldn"t save, try again.');
        }

      }
    );
}

function lesson(id, title){
    var lesson = '<li class="nestable-item nestable-item-handle lesson" data-id="'+id+'">\
        <div class="nestable-handle"><i class="md md-menu"></i></div>\
        <div class="nestable-content">\
            <div class="media v-middle">\
                <div class="media-left">\
                    <div class="icon-block half bg-red-400 text-white">\
                        <i class="fa fa-book"></i>\
                    </div>\
                </div>\
                <div class="media-body">\
                    <h4 class="text-title media-heading margin-none">\
                        <a href="#" class="link-text-color">'+title+'</a>\
                    </h4>\
                </div>\
                <div class="media-right">\
                    <a href="#" class="btn btn-white btn-flat editlesson"><i class="fa fa-pencil fa-fw" data-id="'+id+'"></i> Edit</a>\
                </div>\
            </div>\
            <ul class="nestable-list sublesson" data-id="'+id+'">\
            </ul>\
        </div>\
        <div class="media-right">\
            <a class="btn btn-primary paper-shadow relative addtutorial" href="#" data-id="'+id+'"  style="margin-bottom:10px">Add tutorial</a>\
        </div>\
    </li>';

    return lesson;
}

function subLesson(id,title){
    var sublesson = '<li class="nestable-item nestable-item-handle" data-id="'+id+'">\
        <div class="nestable-handle"><i class="md md-menu"></i></div>\
        <div class="nestable-content">\
            <div class="media v-middle">\
                <div class="media-left">\
                    <div class="icon-block half bg-red-400 text-white">\
                        <i class="fa fa-book"></i>\
                    </div>\
                </div>\
                <div class="media-body">\
                    <h4 class="text-title media-heading margin-none">\
                        <a href="#" class="link-text-color">'+title+'</a>\
                    </h4>\
                </div>\
                <div class="media-right">\
                    <a href="#" class="btn btn-white btn-flat edittutorial" data-id="'+id+'"><i class="fa fa-pencil fa-fw"></i> Edit</a>\
                </div>\
            </div>\
        </div>\
    </li>';

    return sublesson;
}

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.instructors-multicombo').select2();
    $('#videoinput').on('input', function () {
        $value = $(this).val();
        $('#video').attr('src',$value);
    });

    var course_structure = {};

    $('#newDescBtn').click(function () {
        subForm('#newDescForm','/account/course/create');
    });

    $(document).on('click','.addlesson',function () {
        var ran = Math.floor(Math.random() * (100 - 1 + 1));
        $('#tutorial').append(lesson(ran,'asdfghjkl'+ran));
    });

    $('').click();

    $(document).on('click','.editlesson',function () {

    });

    $(document).on('click','.addtutorial',function () {
        var ran = Math.floor(Math.random() * (100 - 1 + 1));
        var id = $(this).data('id');
        var lesson = $('.sublesson').filter(function (index, element) {
            return element.dataset.id == id;
        });
        console.log(lesson);
        lesson.append(subLesson(ran,'asdfghjkl'+ran));

        // console.log(lesson);
    });

    $(document).on('click','.edittutorial',function () {

    });

});
