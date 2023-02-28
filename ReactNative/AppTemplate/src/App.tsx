import React from 'react';
import {NavigationContainer} from '@react-navigation/native'
import {createNativeStackNavigator} from '@react-navigation/native-stack'
import View1 from './views/View1/View1';
import View2 from './views/View2/View2';
import {
   SafeAreaView,
   ScrollView,
   StatusBar,
   StyleSheet,
   Text,
   useColorScheme,
   View,
} from 'react-native';

import {
   Colors,
   DebugInstructions,
   Header,
   LearnMoreLinks,
   ReloadInstructions,
} from 'react-native/Libraries/NewAppScreen';

const {Navigator, Screen} = createNativeStackNavigator();


const App = () => {

   return (

      <NavigationContainer>
         <Navigator>
            <Screen name='View1' component={View1}/>
            <Screen name='View2' component={View2}/>
         </Navigator>
      </NavigationContainer>
      
   );
}

const styles = StyleSheet.create({
   container: {
      flex: 1,
      backgroundColor: '#fff',
      alignItems:'center',
      justifyContent:'center',
   }
});

export default App;