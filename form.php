<DOCTYPE html>
<html lang = pt-br>
<style>
    body{
        background-image: url("https://cdn.wallpapersafari.com/56/11/OIf0lp.jpg");
        font-family: Calibri;
        //position: fixed;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.4;
        color: white;
    }
    .space{
        margin: 0 auto 1.25rem auto;
        padding: 0.25rem;
    }
    label{
        display: flex;
        align-items: center;
        font-size: 1.125rem;
        margin-bottom: 0.5rem;
    }
    input, button, select, textarea{
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;

    }
    .subutton{
        padding: 25px;
        border-color: rebeccapurple;
        border-radius: 0.25rem;
    }
    .areatext{
        min-height: 120px;
        width: 100%;
        padding: 0.625em;
        resize: vertical;
    }
    .form-control{
        display: inline-block;
        width: 100%;
        height: 2.375rem;
        padding: 0.375rem 0.75rem;
        border-radius: 0.25rem;
        border: 1px solid rebeccapurple;

    }
    .fontitalic{
        font-family: italic;
        font-size: 25px;
        text-align: center;
    }
    .textcenter{
        text-align: center;
    }
    form{
        background: linear-gradient(#e66465, #9198e5);
        margin: 0 auto;
        width: 400px;
        padding: 1em;
        border: 1px solid #CCC;
        border-radius: 1em;
    }
    @media (min-width: 480px){
        form{
            padding: 2.5rem;
        }
    }
</style>    
<head>
    <meta charset = "UTF-8">
    <title>Form Space</title>
</head>
<body>
    <header>
        <h1 id="title" font-family:italic class="textcenter">Internet Acessibility Form</h1>
        <p id="description" class="fontitalic">internet data search</p>
    </header>
    <form  action="includes.php" method="post" id="survey-form">
        <div class="space">
            <label id="name-label" for="name">Name</label>
            <input  type="text" name="name" id="name" class="form-control" placeholder="Your name" required/>
        </div>
        <div class="space">
            <label id="email-label" for="email">Email</label>
            <input  type="email" name="email" id="email" class="form-control" placeholder="Your email" required/> 
        </div>
        <div class="space">
            <label id="number-label" for="number">Age<span>(optional)</span></label>
            <input  type="number" name="age" id="number" min="8" max="99" class="form-control" placeholder="Age"/>
        </div>
        <div>
            <p>You have internet access at home?</p>
            <select  id="dropdown" name="role" class="form-control" required>      
                <option name="yesno" value="Yes">Yes, I have access</option>
                <option name="yesno" value="No">No, I don't have access</option>
            </select>
        </div>
        <div> 
            <p>Where are you accessing the internet?</p>
            <label><input  name="local" value="home" type="radio" cheked/>Home</label>
            <label><input  name="local" value="school" type="radio" cheked/>School/colege</label>
            <label><input  name="local" value="job" type="radio" cheked/>Job</label>
            <label><input  name="local" value="other" type="radio" cheked/>Other</label>
        </div>
        <div>
            <p>Which device do you have?</p>
            <label><input  name="device" value="computer" type="checkbox"/>Computer/Notebook</label>
            <label><input  name="device" value="tablet" type="checkbox"/>Tablet</label>
            <label><input  name="device" value="phone" type="checkbox"/>Phone</label>
            <label><input  name="device" value="smarttv" type="checkbox"/>Smart Tv</label>
        </div>
        <div>
            <p>Comments or suggestions?</p>
            <textarea id="comments" name="comment" class="areatext" placeholder="Enter your comment here..."></textarea>
        </div>
        <div>
        <button type="submit" id="submit" class="subutton">Submit</button> 
        </div>
    </form>
</body>
</html>