module.exports = {
  env: {
    es6: true,
    browser: true,
    jquery: true
  },
  extends: 'airbnb-base',
  rules: {
    'no-console': 1,
    'no-unused-vars': 1,
    'semi': [2, 'never'],
    'no-restricted-globals': [0, 'screen']
  }
};
