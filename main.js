$(document).ready(function () {
    $("a.learn_more").click(function () {
        window.open($(this).attr("href"));
        return false;
    });
});