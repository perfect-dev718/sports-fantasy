<div class="profile-block">
    <h3 class="title">Player Info</h3>
    <div class="row">
        <div class="col-5">
            <img src="/image/player1.png" class="rounded-circle photo">
        </div>
        <div class="col-7">
            <div class="name-block">
                <h5 class="name">{{ $player->full_name }}</h5>
                <p class="city">New York Jets</p>
                <p class="position-text">
                    Position : {{ $player->position }}
                </p>
                <p class="position-text">
                    Position on waivers (THU)
                </p>
                <p class="position-text">
                    status healthy
                </p>
            </div>
        </div>
    </div>
    <div class="row pos-block">
        <div class="col-4 text-center item">
            <h5 class="pos-title">POS RANK</h5>
            -
        </div>
        <div class="col-4 text-center item">
            <h5 class="pos-title">Avg points</h5>
            -
        </div>
        <div class="col-4 item">
            <h5 class="pos-title">
                % rostered
            </h5>
            95.1(+5%)
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <button class="plus-btn text-white" style="margin-right: 7px" id="add-btn">Add</button>
        <button class="flag-btn"><span class="fa fa-flag" id="watch-btn"></span>&nbsp;Watch</button>
    </div>
    <div class="row season-block">
        <h5 class="title">Season Status</h5>
        <table class="table">
            <colgroup>
                <col width="28%">
                <col width="18%">
                <col width="18%">
                <col width="18%">
                <col width="18%">
            </colgroup>
            <thead>
            <th></th>
            <th>Att</th>
            <th>Yds</th>
            <th>TD</th>
            <th>Pts</th>
            </thead>
            <tbody>
            <tr>
                <td>2019</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td></td>
            </tr>
            <tr>
                <td>Proj 2020</td>
                <td>280.5</td>
                <td>1310</td>
                <td>8.5</td>
                <td>318</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="row outlook-block">
        <h5 class="title col-12">Outlook</h5>
        <div class="points d-flex justify-content-between">
            <p>2020 Projection</p>
            <p>318 Points</p>
        </div>
        <div class="content">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book. It has survived not only five
            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </div>
    </div>
</div>
