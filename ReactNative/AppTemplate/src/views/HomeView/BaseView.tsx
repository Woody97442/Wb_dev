import React, { useEffect, useState } from 'react';
import * as commonStyle from '../../utils/commonStyle';
// import { connect } from 'react-redux';
import {
  SafeAreaView,
  StyleSheet,
  ScrollView,
  View,
  Text,
  StatusBar,
  Image,
  FlatList,
  Button,
  TouchableOpacity,
  ActivityIndicator,
} from 'react-native';


const BaseView = () => {

  return (
    <View style={styles.main_container}>

          <Text>A new Pokemon appeared !</Text>
          <TouchableOpacity onPress={() => "ajouter la funtion a executer"}>
              <Image source={require('url de l\'image')} />
          </TouchableOpacity>

    </View>
  );
};


const styles = StyleSheet.create({
  main_container: {
      flex: 1
  },

});


export default BaseView;