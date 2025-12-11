<div class="sidebar-top">
    <h1>How to booPlate</h1>
    <ol>
        <li>Take a photo of a license plate from any state</li>
        <li>Click on that state</li>
        <li>Upload the photo!</li>
    </ol>
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
    <h2>Level {{ $level }}:</h2>
    <p>{{ $title }}</p>
    @endauth
</div>    
