<!DOCTYPE html>
<html lang="en" class="has-background-grey-darker">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Test document for brakke.css">
        <meta name="keywords" content="Daniel,Brakke,CSS,SASS">
        <meta name="author" content="Daniel Brakke">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
        <style>
            body p {
                margin-bottom: .8em;
            }
            a, a:hover {
                color: rgb(142, 173, 254);
            }
            .columns .column {
                padding: 0 .75rem;
            }
            .columns .column:first-child {
                padding-top: .75rem;
            }
            .columns .column:last-child {
                padding-bottom: .75rem;
            }
            @media screen and (min-width: 769px) {
                .columns .column:last-child {
                    padding-top: .75rem;
                }
            }
        </style>
    </head>
    <body class="has-text-grey-lighter" style="max-width: 800px; margin: 40px auto;">
        <section class="content" style="margin: 20px;">
            <h1 class="is-size-1 has-text-weight-bold has-text-grey-lighter">
                Dan Brakke
            </h1>
            <h2 class="is-size-3 has-text-grey-lighter">Developer - <a href="https://fjorgedigital.com" target="_blank" style="color: rgb(254,118,52);">fjorge</a></h2>
            <p>
                I am a developer that hails from the Twin Cities.
                I spent much of my adult life as a musician and photographer, only to find my true calling as a developer while attending Dunwoody College of Technology.
            </p>
            <p>
                I like to spend my free time learning as much about technology as possible, and keeping up to date with the current trends in the industry.
            </p>
            <h3 class="is-size-3 has-text-grey-lighter">Personal Projects</h3>
            <div class="columns">
                <div class="column">
                    <ul>
                        <li>
                            <a href="https://github.com/brakkum/ZOoTR-Entrance-Tracker" target="_blank">Ocarina of Time Entrance Tracker</a>
                            <ul>
                                <li>JavaScript - React</li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://github.com/brakkum/MyGig" target="_blank">MyGig</a>
                            <ul>
                                <li>C# - .NET Core, Entity Framework</li>
                                <li>JavaScript - React</li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://github.com/brakkum/linkst.rip" target="_blank">linkst.rip</a>
                            <ul>
                                <li>PHP - Symfony</li>
                                <li>JavaScript - React</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <ul>
                        <li>
                            <a href="https://github.com/brakkum/photos.brakke.dev" target="_blank">photos.brakke.dev</a>
                            <ul>
                                <li>Javascript - React, Node</li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://github.com/brakkum/timelapse_eq" target="_blank">Timelapse_EQ</a>
                            <ul>
                                <li>Python</li>
                            </ul>
                        </li>
                        <li class="project-list-item">
                            <a href="https://github.com/brakkum/gigs.brakke.dev" target="_blank">gigs.brakke.dev</a>
                            <ul>
                                <li>PHP</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </body>
</html>
