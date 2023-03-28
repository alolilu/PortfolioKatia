<?php


function redirectNotification($message, $redirect = null, $class = "message")
{
    global $routes;
    if (!$redirect) $redirect = $routes['home'];
    $message = base64_encode($message);
    header("Location: $redirect?message=$message&class=$class");
    echo "<script>location.href='$redirect?message=$message&class=$class'</script>";
}

function printNotification()
{
    if (isset($_GET['message'])) {
        $message = base64_decode($_GET['message']);
        if (isset($_GET['class'])) $class = $_GET['class'];
?>
        <div class="message <?= $class ?>">
            <p><?= $message ?></p>
        </div>

        <script>
            history.replaceState(null, "", location.href.split("?")[0]);
            setTimeout(() => {
                let notifications = document.getElementsByClassName("notification");

                notifications[0].classList.add("hide");
                setTimeout(() => {
                    notifications[0].remove();
                }, 1000)
            }, 9000);
        </script>
<?php }
}