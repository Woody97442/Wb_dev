import React from 'react';
import {NavigationContainer} from '@react-navigation/native'
import {createNativeStackNavigator} from '@react-navigation/native-stack'

import BottomTabView from '../BottomTabView/BottomTabView';

const Routes = () => {
   const Stack = createNativeStackNavigator();

   return (

      <NavigationContainer>
        <Stack.Navigator initialRouteName='home' screenOptions={{headerShown:false}}>
            <Stack.Screen name='home' component={BottomTabView}/> 
        </Stack.Navigator>
      </NavigationContainer>
      
   );
}

export default Routes;