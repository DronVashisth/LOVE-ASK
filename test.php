
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do You Love Me?</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f5f5;
}

.container {
    text-align: center;
}

h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.buttons {
    display: inline-flex;
    gap: 20px;
}

button {
    padding: 10px 20px;
    font-size: 1.2rem;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

#yesBtn {
    background-color: #28a745;
    color: white;
}

#yesBtn:hover {
    background-color: #218838;
}

#noBtn {
    background-color: #dc3545;
    color: white;
    position: absolute;
    top: 50px; /* Position the No button at the top, away from Yes */
    left: 60%;  /* Position it to the right of the Yes button */
}

#noBtn:hover {
    background-color: #c82333;
}

/* Popup styling */
.popup {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: none;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.8);
}

.popup-content {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    color: #333;
}

</style>
<body>
    <div class="container">
        <h1>Do You Love Me?</h1>
        <div class="buttons">
            <button id="yesBtn">Yes</button>
            <button id="noBtn">No</button>
        </div>
    </div>

    <div id="lovePopup" class="popup">
        <div class="popup-content">
            <h2>I KNEW IT!!</h2>
        </div>
    </div>

    <script src="script.js"></script>
    
</body>


</html>
