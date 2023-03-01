# Npm a executer

npm install @react-native-async-storage/async-storage
npm install @react-navigation/bottom-tabs
npm install @react-navigation/native
npm install @react-navigation/native-stack
npm install @reduxjs/toolkit
npm install @rneui/base
npm install @rneui/themed
npm install moment
npm install react-native-safe-area-context
npm install react-native-screens
npm install react-native-vector-icons
npm install react-redux
npm install redux
npm install redux-persist
npm install @react-navigation/material-bottom-tabs react-native-paper
npm install add react-native-svg react-native-svg-transformer

# Android app builde.gradle
apply from: "../../node_modules/react-native-vector-icons/fonts.gradle"

# Android app builde.gradle
```
/**
 * Metro configuration for React Native with svg support
 * https://github.com/facebook/react-native
 *
 * @format
 */

const { getDefaultConfig } = require('metro-config');

module.exports = (async () => {
  const {
    resolver: { sourceExts, assetExts },
  } = await getDefaultConfig();

  return {
    transformer: {
      babelTransformerPath: require.resolve('react-native-svg-transformer'),
      getTransformOptions: async () => ({
        transform: {
          experimentalImportSupport: false,
          inlineRequires: false,
        },
      }),
    },
    resolver: {
      assetExts: assetExts.filter(ext => ext !== 'svg'),
      sourceExts: [...sourceExts, 'svg'],
    },
  };
})();
```