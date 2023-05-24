
$(document).ajaxSuccess(function () {
    btnAction(false);
    preloader(true);
});

$(document).ajaxStart(function () {
    btnAction(true);
    preloader(true)
});
$(document).ajaxComplete(function(){
    preloader(false);
});

$(document).ajaxError(function () {
    btnAction(false);
    preloader(false);
});

function preloader(stat) {
    if (stat) {
        $('.preloader').fadeIn();
        $('#wrapper').css('opacity', '0.6');
        return;
    }
    $('.preloader').fadeOut();
    $('#wrapper').css('opacity', '1')
}
function btnAction(action) {
    if (action) {
        $('.btn').addClass('disabled');
        $('button').addClass('disabled');
        $('button').attr('disabled', 'disabled');
        $('.btn').attr('disabled', 'disabled');
    } else {
        $('.btn').removeClass('disabled');
        $('button').removeClass('disabled');
        $('button').removeAttr('disabled', 'disabled');
        $('.btn').removeAttr('disabled', 'disabled');
    }
}

function showModal(data, title, size) {
    size = size || '50';
    $('#view-model').find('h6').text(title);
    $('#view-model').find('.model-data').html(data);
    $('.modal-dialog').css({width:size+'%'});
    $('#view-model').modal('show');
}

function loadModelAjax(url, title, size) {
    size = size || '50';
    $.get(url).done(function (res) {
        showModal(res, title, size)
    });
}

function closeModal() {
    $('#view-model').modal('hide');
}






$("input[rangepicker]").daterangepicker({
    forceUpdate: true,
    minDate: '2017-10-07',
    startDate: moment().startOf('month'),
    endDate: moment().endOf('month'),
    ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'Last 90 Days': [moment().subtract(89, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
        'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
        'All Time': ['2017-10-07', new Date]
    },
    callback: function (startDate, endDate, period) {
        var title = startDate.format('L') + ' – ' + endDate.format('L');
        $(this).val(title)
        $('input[name="start"]').val(startDate.format('YYYY-MM-DD'));
        $('input[name="end"]').val(endDate.format('YYYY-MM-DD'));
    }
});
$("input[datepicker]").daterangepicker({
    forceUpdate: false,
    startDate: new Date(),
    minDate: '2017-10-07',
    single:true,
    callback: function (startDate, endDate, period) {
        $(this).val(startDate.format('YYYY-MM-DD'))
        // $('input[name="start"]').val(startDate.format('YYYY-MM-DD'));
        // $('input[name="end"]').val(endDate.format('YYYY-MM-DD'));
    }
});




if ($('table[datatable]').length > 0){

    $('table[datatable]').DataTable({
        responsive: true,
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
        }
    });
    
}

$(document).on('click', '.ajax-delete', function (e) {
    e.preventDefault();
    var element = $(this);
    $.confirm({
        title: 'Confirm!',
        content: 'Are you sure want to remove?',
        buttons: {
            confirm: function () {
                $.ajax({
                    type: 'post',
                    url: element.attr('href'),
                    data: { _method: 'DELETE' }
                }).done(function (res) {
                    if (res.success) {
                        toastr.info(res.message, 'success');
                        element.closest(element.attr('data-set')).fadeOut();
                    }

                    if (res.fail) {
                        toastr.warning(res.message, 'Oops!');
                    }
                }).fail(function (res) {
                    alert('Some problem in your session. refresh the browser and try again');
                });
            },
            cancel: function () {

            },
        }
    });

});

$('select[select]').select2({
    minimumResultsForSearch: Infinity,
     width: '100%',
});

$('select[select-tag]').select2({
    tags: true,
    width:'100%',
    tokenSeparators: [',', ' ']
});




setTimeout(function(){
    $('[role="alert"]').remove();
},5000);


function image_read(){
    el = '.image';
    $(document).on('click', el, function () {
        $('input[name="image"]').click();
    });
    
    $(document).on('change', 'input[name="image"]', function () {
        readURL(this, $(this));
    });
}

function imagehandleRead(thisE,input) {
    thisE.children('input').click();

    // $(document).on('change', 'input[name="' + input +'"]', function () {
    //     readURL(this, $(this));
    // });
}

function readURL(input, element) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            element.parent().find('img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}




var fileSelect = $("#fileSelect"),
    fileElem = document.getElementById("fileElem"),
    fileList = document.getElementById("choosed-image-list");

$(document).on('click', '#fileSelect',function(e) {
    e.preventDefault();
    $('#fileElem').click()
});

function handleFiles(files) {
    
    if (!files.length) {
        fileList.innerHTML = "<p>No files selected!</p>";
    } else {
        // fileList.innerHTML = "";
        for (var i = 0; i < files.length; i++) {
            var img_url = window.URL.createObjectURL(files[i]);
            var info = '';//files[i].name + ": " + files[i].size + " bytes";
            var template =  '<div class="col-sm image-item"> <img src="' + img_url+'" width="100%">'+
                            '<br><span>' + info +'</span></div>';
            $('#choosed-image-list').append(template);
            // .attr('src', img_url);
            // list.appendChild(li);

            // // var img = document.createElement("img");
            // alert()


            // img.src = window.URL.createObjectURL(files[i]);
            // img.height = 60;
            // img.onload = function () {
            //     window.URL.revokeObjectURL(this.src);
            // }
            // li.appendChild(img);
           
            // var br = document.createElement("br");
            // var info = document.createElement("span");
            // info.innerHTML = files[i].name + ": " + files[i].size + " bytes";
            // li.appendChild(br);
            // li.appendChild(info);
        }
    }
}

function goBack(){
    window.history.back();
}

function open_popup(url) {
    var w = 880; var h = 570; var l = Math.floor((screen.width - w) / 2);
    var t = Math.floor((screen.height - h) / 2); 
    var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
}

$("#media-manager").fancybox({
    fitToView: true,
    width: '90%',
    height: '100%',
    autoSize: false,
    closeClick: false,
    openEffect: 'none',
    closeEffect: 'none',
    type: 'iframe'
});


function responsive_filemanager_callback(field_id) {
    var t = $('#' + field_id), url = t.val(), img_tag = t.attr('data-image-tag');
    $(img_tag).attr('src', url);
} 



if ($('textarea[name="content"]').length > 0) {
    CKEDITOR.editorConfig = function (config) {
        config.toolbarGroups = [
            { name: 'document', groups: ['mode', 'document', 'doctools'] },
            { name: 'clipboard', groups: ['clipboard', 'undo'] },
            { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
            { name: 'forms', groups: ['forms'] },
            '/',
            { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
            { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
            { name: 'links', groups: ['links'] },
            { name: 'insert', groups: ['insert'] },
            '/',
            { name: 'styles', groups: ['styles'] },
            { name: 'colors', groups: ['colors'] },
            { name: 'tools', groups: ['tools'] },
            { name: 'others', groups: ['others'] },
            { name: 'about', groups: ['about'] },

        ];
        
        
    };
    CKEDITOR.replace('content',{
        filebrowserBrowseUrl: "/media/filemanager/dialog.php?type=2&editor=ckeditor&fldr=",
    });
}

