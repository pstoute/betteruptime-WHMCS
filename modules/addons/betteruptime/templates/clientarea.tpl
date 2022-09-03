<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card mb-3" id="BetterUptimeTable">
            <div class="panel-heading card-header">
                <h3 class="panel-title card-title m-0">Uptime - {$domain}</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Time period</th>
                        <th>Availability</th>
                        <th>Downtime</th>
                        <th>Incidents</th>
                        <th>Longest incident</th>
                        <th>Avg. incident</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Today</td>
                        <td>{$day_availability}</td>
                        <td>{$day_downtime}</td>
                        <td>{$day_incidents}</td>
                        <td>{$day_longest_incident}</td>
                        <td>{$day_avg_incident}</td>
                    </tr>
                    <tr>
                        <td>Last Week</td>
                        <td>{$week_availability}</td>
                        <td>{$week_downtime}</td>
                        <td>{$week_incidents}</td>
                        <td>{$week_longest_incident}</td>
                        <td>{$week_avg_incident}</td>
                    </tr>
                    <tr>
                        <td>Last Month</td>
                        <td>{$month_availability}</td>
                        <td>{$month_downtime}</td>
                        <td>{$month_incidents}</td>
                        <td>{$month_longest_incident}</td>
                        <td>{$month_avg_incident}</td>
                    </tr>
                    <tr>
                        <td>Last Year</td>
                        <td>{$year_availability}</td>
                        <td>{$year_downtime}</td>
                        <td>{$year_incidents}</td>
                        <td>{$year_longest_incident}</td>
                        <td>{$year_avg_incident}</td>
                    </tr>
                    <tr>
                        <td>All Time</td>
                        <td>{$all_time_availability}</td>
                        <td>{$all_time_downtime}</td>
                        <td>{$all_time_incidents}</td>
                        <td>{$all_time_longest_incident}</td>
                        <td>{$all_time_avg_incident}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>