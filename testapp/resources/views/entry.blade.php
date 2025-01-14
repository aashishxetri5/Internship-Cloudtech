<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Details</title>

    <style>
        label {
            display: block;
            margin-bottom: 5px;
        }

        form>div {
            margin-bottom: 20px;
        }

        input,
        select {
            height: 30px;
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="">
        <form action="entry/save" method="post">
            @csrf
            <div class="name">
                <label for="fullname">Fullname</label>
                <input type="text" name="fullname" id="fullname" required />
            </div>

            <!-- Age -->
            <div class="age">
                <label for="age">Age</label>
                <input type="text" name="age" required />
            </div>

            <!-- Address -->
            <div class="address">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" required />
            </div>

            <!-- Nationality -->
            <div class="nationality">
                <label for="Nationality">Nationality</label>
                <select name="nationality" id="Nationality">
                    <option value="Nepali" selected>Nepali</option>
                    <option value="Australian">Australian</option>
                    <option value="American">American</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <!-- Submit -->
            <div class="submit">
                <input type="submit" value="Check Elligibility">
            </div>
        </form>
    </div>
</body>

</html>