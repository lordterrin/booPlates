<div class="sidebar-top">
    <h1>How to booPlate</h1>
    <ol>
        <li>Take a photo of a license plate from any state</li>
        <li>Click on that state</li>
        <li>Upload the photo!</li>
        <li>???</li>
        <li>Profit!</li>
    </ol>
    <h1>Or: </h1>
    <ul>
        <li> See where you stand in the <a href="booBoards">booBoards</a> leaderboards</li>
        <li> Want booData?  Check out our <a href="docs/api/v1">api</a> </li>
    </ul>
</div>
<div class="sidebar-mid">
    
    @auth
    <h1>booStats</h1>
    <p> {{ $userStatesCount }} / {{ $totalStates }} </p>
    @endauth

</div>
<div class="sidebar-bot">
    @auth
    <h1>You are</h1>
    <h2 id="level-callout">Level {{ $level }}:</h2>
    <p>{{ $title }}</p>
    @endauth
</div>    
