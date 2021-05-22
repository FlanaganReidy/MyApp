<!--
 * Name: Shannon Reidy
 * Coding 07
 * Purpose: template for pilot creator page
-->

<h1>Build your first Lancer Pilot</h1>
<div class ="container-fluid">
    <h3>Biographical data</h3>
    <div>
        <p>Your pilot is the person inside the machine; the character whose entire career you'll be playing out. Lancers are generally interesting people -- if they weren't you probably wouldn't be playing them! As you create your character you will be able to figure out who they are and what makes them so interesting.</p>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">Pilot Name</span>
        <input type="text" id="pilot-name" name = "pilot-name" class="form-control" aria-label="name" maxlength="64">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">Callsign</span>
        <input type="text" id="callsign" name = "callsign" class="form-control" aria-label="name" maxlength="64">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">Background</span>
        <input type="text" id="background" name = "Background" class="form-control" aria-label="name" maxlength="64">
    </div>
    <h3>Triggers</h3>
    <p>As a central character inthe story, your pilot will have moments when their background, training, and personality shine through. These moments are your pilot's triggers: short phrases that describe key decisions and actions.</p>
    <h3>Choose 4:</h3>
    <div class="row">
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="act-unseen">
        <label class="form-check-label" for="act-unseen">Act unseen or unheard</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="apply-fists">
        <label class="form-check-label" for="apply-fists">Apply fists to faces</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="assault">
        <label class="form-check-label" for="assault">Assault</label>
    </div>
    </div>
    <div class="row">
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="blow-something">
        <label class="form-check-label" for="blow-something">Blow something up</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="charm">
        <label class="form-check-label" for="charm">Charm</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="Get-a-hold">
        <label class="form-check-label" for="get-a-hold">Get a hold of something</label>
    </div>
    </div>
    <div class="row">
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="get-somewhere">
        <label class="form-check-label" for="get-somewhere">Get somewhere quickly</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="hack-or-fix">
        <label class="form-check-label" for="hack-or-fix">Hack or fix</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="invent-or-create">
        <label class="form-check-label" for="invent-or-create">Invent or create</label>
    </div>
    </div> 
    <div class = "row">
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="investigate">
        <label class="form-check-label" for="investigate">investigate</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="lead-or-inspire">
        <label class="form-check-label" for="lead-or-inspire">Lead or inspire</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="patch">
        <label class="form-check-label" for="patch">Patch</label>
    </div>
    </div>
    <div class = "row">
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="pull-rank">
        <label class="form-check-label" for="pull-rank">Pull rank</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="read-a-bad">
        <label class="form-check-label" for="read-a-bad">Read a bad situation</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="show-off">
        <label class="form-check-label" for="show-off">Show off</label>
    </div>
    </div>
    <div class = "row">
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="spot">
        <label class="form-check-label" for="spot">Spot</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="stay-cool">
        <label class="form-check-label" for="stay-cool">Stay cool</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="survive">
        <label class="form-check-label" for="survive">survive</label>
    </div>
    </div>
    <div class = "row">
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="take-control">
        <label class="form-check-label" for="take-control">Take control</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="take-someone-out">
        <label class="form-check-label" for="take-someone-out">Take someone out</label>
    </div>
    <div class="form-check form-switch col-md">
        <input class="form-check-input" type="checkbox" id="threaten">
        <label class="form-check-label" for="threaten">Threaten</label>
    </div>
    </div> 
    <div id = "error"></div>
    <div class="row justify-content-md-center">
        <button type="button" id="pilot-submit" class="btn btn-primary btn-md">Submit</button>
    </div>
</div>