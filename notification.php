<?php
function showNotification($title, $message) {
    echo '
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .cookie-card {
            max-width: 320px;
            padding: 1rem;
            background-color:rgb(250, 250, 250);
            border-radius: 10px;
            box-shadow: 20px 20px 30px rgba(0, 0, 0, .05);
            font-family: Arial, sans-serif;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }
        .title {
            font-weight: 600;
            color: rgb(31 41 55);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .description {
            margin-top: 1rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
            color: rgb(75 85 99);
        }
        .actions {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }
        .accept {
            font-size: 0.75rem;
            background-color: rgb(17 24 39);
            font-weight: 500;
            border-radius: 0.5rem;
            color: #fff;
            padding: 0.625rem 1rem;
            border: none;
            transition: all .15s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }
        .accept:hover {
            background-color: rgb(55 65 81);
        }
    </style>

    <div class="cookie-card">
        <span class="title">
            <i class="fa-solid fa-circle-check" style="color: #74C0FC;"></i> '.$title.'
        </span>
        <p class="description">'.$message.'</p>
        <div class="actions">
            <button class="accept" onclick="this.parentElement.parentElement.style.display=\'none\'">OK</button>
        </div>
    </div>';
}
?>
