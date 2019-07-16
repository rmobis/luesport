module.exports = {
	'env': {
		'browser': true,
		'es6': true,
		'node': true
	},
	'extends': [
		'plugin:@typescript-eslint/recommended',
		'plugin:react/recommended'
	],
	'globals': {
		'Atomics': 'readonly',
		'SharedArrayBuffer': 'readonly'
	},
	'parser': '@typescript-eslint/parser',
	'parserOptions': {
		'ecmaFeatures': {
			'jsx': true
		},
		'ecmaVersion': 2018,
		'sourceType': 'module'
	},
	'plugins': [
		'react',
		'@typescript-eslint'
	],
	'settings': {
		'react': {
			'version': 'detect'
		}
	},
	'rules': {
		'@typescript-eslint/indent': [ 'error', 'tab' ],
		'@typescript-eslint/semi': [ 'error', 'always' ],
		'quotes': [ 'error', 'single' ],
		'react/prop-types': 'off'
	}
};
