jQuery(document).ready(function ($) {
    $('.commentlist li').each(function (i) {
        $(this).find('.commentNumber').text(`#${i + 1}`)
    })

    $('#commentform').on('click', '#submit', function (e) {
        e.preventDefault();
        const comParent = $('#commentform');
        $('.wrap_result').css('color', 'green').text('Сохраниене комертария ').fadeIn(500, function () {
            const data = comParent.serializeArray();
            $.ajax({
                url: comParent.attr('action'),
                data: data,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                datatype: 'JSON',
                success: function (respons) {
                    if (respons.error) {
                        $('.wrap_result').css('color', 'red').append('</br><strong>ошибка :</strong>' + respons.error.join('</br>'))
                        $('.wrap_result').delay(2000).fadeOut(500)

                    } else if (respons.success) {
                        $('.wrap_result').append('<br><strong>Сохранено</strong>').delay(2000).fadeOut(500, function () {
                            if (respons.data.parant_id > 0) {
                                let r = comParent.parents('div#respond').prev()
                                console.log(r)
                                r.after('<ul class="children">' + respons.comment + '</ul>')
                            } else {
                                if ($.contains('#comments', 'ol.commentlist')) {
                                    $('ol.commentlist').append(respons.comment)
                                } else {
                                    $('#respond').before('<ol class="commentlist group">' + respons.comment + '</ol>')
                                }
                            }
                            $('#cancel-comment-reply-link').click();
                        })
                    }
                },
                error: function () {
                    $('.wrap_result').css('color', 'red').append('</br><strong>ошибка !</strong>')
                    $('.wrap_result').delay(2000).fadeOut(500,function () {
                        $('#cancel-comment-reply-link').click();
                    })
                }
            })
        })

    })
})