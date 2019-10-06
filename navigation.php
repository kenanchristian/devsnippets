<?php

return [
    'Welcome' => 'snippets/welcome',
    'C++' => 'snippets/c',
    'Docker' => 'snippets/docker',
    'Git' => 'snippets/git',
    'PHP' => [
        'children' => [
            'DateTime' => 'snippets/php/datetime',
            'Tooling' => 'snippets/php/tools',
        ]
    ],
    'Python' => 'snippets/python',
    'React' => 'snippets/react',
    'Vue' => 'snippets/vue',
];
