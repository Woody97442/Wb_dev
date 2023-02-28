import React, { useEffect, useState } from 'react';
import {
    Button,
    FlatList,
    Image,
    SafeAreaView,
    ScrollView,
    StatusBar,
    StyleSheet,
    Text,
    TouchableOpacity,
    useColorScheme,
    View,
} from 'react-native';

const fetchExemple = () => {
  const url = 'https://example.com/api/data';
  fetch(url)
    .then(response => response.json())
    .then(data => {
      // Traiter les données
    })
    .catch(error => {
      console.log('Error: ', error);
    })
}

useEffect(() => {
    fetchExemple();
}, [])

const TestView = () => {

    return (
        <View style={{
            flex: 1,
            flexDirection: 'column',
            justifyContent: 'center'
            }}>
            <View style={{flex: 2, backgroundColor: 'red'}}></View>
            <View style={{flex: 2, backgroundColor: 'green'}}></View>
            <View style={{flex: 2, backgroundColor: 'blue'}}></View>
        </View>
    );
};


const styles = StyleSheet.create({
  
});

const mapStateToProps = (state: any) => {
  return {
      ArrayExempleReducer: state.ArrayExempleReducer.ArrayExempleReducer
  };
};

const mapDispatchToProps = (dispatch: any) => {
  return {
      dispatch: (action: any) => { dispatch(action); },
  };
};

export default TestView;