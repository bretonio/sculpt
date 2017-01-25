const OFF = 0
const ERROR = 2

module.exports = {
  'extends': 'standard',
  'rules': {
    'comma-dangle': [ERROR, 'always-multiline'],
    'keyword-spacing': [ERROR, {after: true, before: true}],
    'no-unused-expressions': [ERROR, { "allowTernary": true }],
    'no-unused-vars': [ERROR, {args: 'none'}],
    'quotes': [ERROR, 'single', {avoidEscape: true, allowTemplateLiterals: true }],
    'space-before-blocks': ERROR,
    'space-before-function-paren': [ERROR, {anonymous: 'never', named: 'never'}],
    'no-unused-vars': OFF,
  }
}
