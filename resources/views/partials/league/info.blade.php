<div class="row justify-content-center mt-4">
    <div class="col-md-4">
        <ul class="link-list">
            <a href="{{ route('league.schedule', ['id'=>$league->id]) }}" class="text-decoration-none">
                <li>
                    <p class="mb-0">League Schedule</p>
                    <span class="fa fa-angle-right text-white font-16"></span>
                </li>
            </a>
            <a href="#" class="text-decoration-none">
                <li>
                    <p class="mb-0">League Group Chat</p>
                    <span class="fa fa-angle-right text-white font-16"></span>
                </li>
            </a>

            <a href="{{ route('league.scoreboard', ['id'=>$league->id]) }}" class="text-decoration-none">
                <li>
                    <p class="mb-0">Scoreboard</p>
                    <span class="fa fa-angle-right text-white font-16"></span>
                </li>
            </a>

            <a href="{{ route('league.standings', ['id'=>$league->id]) }}" class="text-decoration-none">
                <li>
                    <p class="mb-0">Standings</p>
                    <span class="fa fa-angle-right text-white font-16"></span>
                </li>
            </a>

            <a href="{{ route('league.settings', ['id'=>$league->id]) }}" class="text-decoration-none">
                <li>
                    <p class="mb-0">League Settings</p>
                    <span class="fa fa-angle-right text-white font-16"></span>
                </li>
            </a>
        </ul>
    </div>
</div>
