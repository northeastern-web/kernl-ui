module.exports = {
  env: {
    es6: true,
    browser: true,
    jquery: true
  },
  extends: 'airbnb-base',
  rules: {
    'no-console': 1,
    'no-unused-vars': 1
  },
  plugins: ['html', 'markdown']
};
