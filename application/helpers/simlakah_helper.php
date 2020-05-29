<?php

function setResponse($result, $type)
{
    $msg['type'] = $type;
    $msg['success'] = false;
    if ($result) {
        $msg['success'] = true;
    }
    echo json_encode($msg);
}

// function is_logged_in()
// {
//     $ci = get_instance();
//     if (!$ci->session->userdata('username')) {
//         redirect('auth');
//     } else {
//         if ((time() - $ci->session->userdata('last_time_login')) > 3600) {
//             redirect('auth/logout');
//         }
//     }
// }
