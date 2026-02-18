var BrowserSyncPlugin = require('browser-sync-webpack-plugin');
module.exports = {
  output: {
    filename: 'app.min.js',
  },
  plugins: [
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      proxy: 'http://localhost:8888/leh/',
      files: [
        './**/*.php',
        './**/*.html',
        './assets/dist/css/**/*.css',
      ]
    })
  ]
}