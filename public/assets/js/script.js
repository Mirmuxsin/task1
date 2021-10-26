function togglePasswordInput(thisEl) {
    thisEl.toggleClass('eye-x-icon');
    thisEl = $((thisEl.parent()).find('input.input'));
    let toggle = thisEl.attr('type');
    toggle === "text" ? thisEl.attr('type', 'password') : thisEl.attr('type', 'text');
}

$("input.input").focus(function () {
    $($($(this).parent()).find(".input\\:placeholder")).addClass('is-valid');
});

$("input.input").blur(function () {
    let el = $($($(this).parent()).find(".input\\:placeholder"));
    let length = $(this).val().length;
    length >= 1 ? true : el.removeClass('is-valid');
});