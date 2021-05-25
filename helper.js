// Default modules
const { writeFileSync } = require('fs');
const { join } = require('path');

// PHP template
let template = `<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../extra/main.css">
	
	<title>VSV &mdash; PHP Module %moduleNumber</title>

</head>

<body>

	<?php

	/*******************/
	/* Filename: %moduleNumber.php
	/* Author: Oscar Hill
	/* Purpose: VSV Applied computing PHP module %moduleNumber
	/* Created: April 2021
	/*******************/

	?>

    <a href="/folio" class="back">Back to index</a>

%modules

</body>

</html>`;

// Modules array
let modules = [
    [], // 0
    [], // 1
    [   // 2
        'Programming - Overview',
        'Programming - Hello World!',
        'Programming - Printing text',
        'Programming - Printing text 2'
    ],
    ['Datatypes'], //3
    ['Variables'], // 4
    ['Operators'], // 5
    ['Functions'], // 6
    ['Conditional statements'], // 7
    [ // 8
        'Arrays',
        'Associative arrays',
        'Working with Arrays',
        'Multidimensional arrays'
    ],
    [ // 9
        'Loops',
        'More LOOPS',
    ],
    [ // 10
        'Forms',
        'more FORMS',
        'Validation of input'
    ],
    [ // 11
        'File I / O',
        'File I / O - READ',
        'File I / O - WRITE'
    ],
    [ // 12
        'PROJECT - 1',
        'PROJECT - 2'
    ]
];

// Index template
let index_template = `<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="extra/index.css">

    <title>VSV &mdash; Index</title>

</head>

<body>

    <h1>VSV Modules</h1>
    <ol>
        <li><a href="modules/1.php"> Module 1 </a></li>
        %modules
    </ol>

</body>

</html>
`;

// Index modules
let index_modules = [];

/**
 * Generates php files for every module, including sub-module headings.
 * Index starts at 2 as I made this post module one and because zero indexing tingz
 */
for (let module_index = 2; module_index <= 12; module_index++) {

    console.log('Work in progress. Exiting to avoid overwriting work.');
    process.exit(1);

    // Generate sub-module headers
    let module_headers = modules[module_index].map((value, index) =>
        `\t<h1 id="${module_index + (index != 0 ? ('.' + index) : '')}"> ${module_index + (index != 0 ? ('.' + index) : '')} &mdash; ${value} </h1>`
    )

    // Write files
    writeFileSync(join(__dirname, 'modules', module_index + '.php'),
        template
            .replace(/%moduleNumber/g, module_index)
            .replace(/%modules/g, module_headers.join('\n\n'))
    )

    // Modules
    index_modules.push(
        `<li><a href="modules/${module_index}.php">${modules[module_index][0]}</a>${modules[module_index].length == 0 ? '' :
            `<ol>
                ${modules[module_index].slice(1).map((v, i) => `<li><a href="modules/${module_index}.php#${module_index + '.' + i}">${module_index + '.' + i + ' — ' + modules[module_index][i]}</a></li>`).join('\n')}
            </ol>`
        }`
    )


}

// Write index.html
writeFileSync(join(__dirname, 'index.html'),
    index_template
        .replace(/%modules/g, index_modules.join('\n')
    )
);
